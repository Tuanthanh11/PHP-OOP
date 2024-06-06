<?php

namespace Thanh\XuongOop\Controllers\Client;

use Thanh\XuongOop\Commons\Controller;
use Thanh\XuongOop\Commons\Helper;
use Thanh\XuongOop\Models\Cart;
use Thanh\XuongOop\Models\CartDetail;
use Thanh\XuongOop\Models\Product;

class CartController extends Controller
{
    private Product $product;
    private Cart $cart;
    private CartDetail $cartDetail;

    public function __construct()
    {
        $this->product =        new Product();
        $this->cart =           new Cart();
        $this->cartDetail =     new CartDetail();
    }

    public function add()
    { // them gio hang
        //Lay thong tin san pham theo id
        $product = $this->product->findByID($_GET['productID']);
        // khoi tao SESSION cart
        // check no dang dang nhap hay khong
        $key = 'cart';
        if (isset($_SESSION['user'])) {

            $key .= '-' . $_SESSION['user']['id'];
        }

        if (!isset($_SESSION[$key][$product['id']])) {

            $_SESSION[$key][$product['id']] = $product + ['quantity' => $_GET['quantity'] ?? 1];
        } else {

            $_SESSION[$key][$product['id']]['quantity'] += $_GET['quantity'];
        }

        // neu ma no dang nhap thi mk phai luu vao trong csdl
        if (isset($_SESSION['user'])) {
            $conn = $this->cart->getConnection();

            $conn->beginTransaction();
            try {

                $cart = $this->cart->findByUserID($_SESSION['user']['id']);

                if (empty($cart)) {
                    $this->cart->insert([
                        'user_id' => $_SESSION['user']['id']
                    ]);
                }

                $cartID = $cart['id'] ?? $conn->lastInsertId();

                $_SESSION['cart_id'] = $cartID;

                $this->cartDetail->deleteByCartID($cartID);

                foreach ($_SESSION[$key] as $productID => $item) {
                    $this->cartDetail->insert([
                        'cart_id' => $cartID,
                        'product_id' => $productID,
                        'quantity' => $item['quantity']
                    ]);
                }

                $conn->commit();
            } catch (\Throwable $th) {
            
                $conn->rollBack();
            }
        }

        header('Location: ' . url('cart/detail'));
        exit;
    }

    public function detail()
    { //chi tiet gio hang
        $this->renderViewClient('cart');
    }
    public function quantityInc()
    { // Tăng số lượng
        // Lấy ra dữ liệu từ cart_details để đảm bảo n có tồn tại bản ghi

        // Thay đổi trong SESSION
        $key = 'cart';
        if (isset($_SESSION['user'])) {
            $key .= '-' . $_SESSION['user']['id'];
        }


        $_SESSION[$key][$_GET['productID']]['quantity'] += 1;

        // Thay đổi trong DB
        if (isset($_SESSION['user'])) {
            $this->cartDetail->updateByCartIDAndProductID(
                $_GET['cartID'],
                $_GET['productID'],
                $_SESSION[$key][$_GET['productID']]['quantity']
            );
        }

        header('Location: ' . url('cart/detail'));
        exit;
    }

    public function quantityDec()
    { // giảm số lượng
        // Lấy ra dữ liệu từ cart_details để đảm bảo n có tồn tại bản ghi

        // Thay đổi trong SESSION
        $key = 'cart';
        if (isset($_SESSION['user'])) {
            $key .= '-' . $_SESSION['user']['id'];
        }

        if ($_SESSION[$key][$_GET['productID']]['quantity'] > 1) {
            $_SESSION[$key][$_GET['productID']]['quantity'] -= 1;
        }

        // Thay đổi trong DB
        if (isset($_SESSION['user'])) {
            $this->cartDetail->updateByCartIDAndProductID(
                $_GET['cartID'],
                $_GET['productID'],
                $_SESSION[$key][$_GET['productID']]['quantity']
            );
        }

        header('Location: ' . url('cart/detail'));
        exit;
    }
    public function remove()
    { // xoa item or xoa trang
        $key = 'cart';
        if (isset($_SESSION['user'])) {
            $key .= '-' . $_SESSION['user']['id'];
        }

        unset($_SESSION[$key][$_GET['productID']]);

        if (isset($_SESSION['user'])) {
            $this->cartDetail->deleteByCartIDAndProductID($_GET['cartID'], $_GET['productID']);
        }

        header('Location: ' . url('cart/detail'));
        exit;
    }
}
