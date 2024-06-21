<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentGatewaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $payment_gateway_settings = array(
            array('id' => '25','key' => 'paypal_status','value' => '1','created_at' => '2024-05-15 10:45:26','updated_at' => '2024-05-15 10:45:26'),
            array('id' => '26','key' => 'paypal_acct_mode','value' => 'sandbox','created_at' => '2024-05-15 10:45:26','updated_at' => '2024-05-15 10:45:26'),
            array('id' => '27','key' => 'paypal_country_name','value' => 'US','created_at' => '2024-05-15 10:45:26','updated_at' => '2024-05-15 10:45:26'),
            array('id' => '28','key' => 'paypal_currency_name','value' => 'USD','created_at' => '2024-05-15 10:45:26','updated_at' => '2024-05-15 10:45:26'),
            array('id' => '29','key' => 'paypal_currency_rate','value' => '1','created_at' => '2024-05-15 10:45:26','updated_at' => '2024-05-15 10:45:26'),
            array('id' => '30','key' => 'paypal_client_id','value' => 'AXRvSoH8rP9L4Dyx7oZYDxlMUqajtp5aFWHcaXV4ei_0_Q5dV58i3TXhgNjyO3NDuyE4cPtW1irUTGLN','created_at' => '2024-05-15 10:45:26','updated_at' => '2024-05-15 10:45:26'),
            array('id' => '31','key' => 'paypal_secret_key','value' => 'EOujm6gaEyvznAkfpoJEvpO8U3HFzr72q3sVRzaQ3rzuUGANM1tMaVfG91SJkH73MUIdURpqieqqLeSN','created_at' => '2024-05-15 10:45:26','updated_at' => '2024-05-15 10:45:26'),
            array('id' => '32','key' => 'paypal_app_id','value' => 'FPWA-20241405-AID','created_at' => '2024-05-15 10:45:27','updated_at' => '2024-05-15 10:45:27'),
            array('id' => '33','key' => 'stripe_logo','value' => '/uploads/media664492c19146c.png','created_at' => '2024-05-15 10:47:29','updated_at' => '2024-05-15 10:47:29'),
            array('id' => '34','key' => 'stripe_status','value' => '1','created_at' => '2024-05-15 10:47:29','updated_at' => '2024-05-15 10:47:29'),
            array('id' => '35','key' => 'stripe_country_name','value' => 'US','created_at' => '2024-05-15 10:47:29','updated_at' => '2024-05-15 10:47:29'),
            array('id' => '36','key' => 'stripe_currency_name','value' => 'USD','created_at' => '2024-05-15 10:47:29','updated_at' => '2024-05-15 10:47:29'),
            array('id' => '37','key' => 'stripe_currency_rate','value' => '1','created_at' => '2024-05-15 10:47:30','updated_at' => '2024-05-15 10:47:30'),
            array('id' => '38','key' => 'stripe_client_id','value' => 'pk_test_51PGcKKC6H8NbZoTza6PPmor7dwRXGkyt9gxJlLS6swD5gKn','created_at' => '2024-05-15 10:47:30','updated_at' => '2024-05-15 10:47:30'),
            array('id' => '39','key' => 'stripe_secret_key','value' => 'sk_test_51PGcKKC6H8NbZoTzsvGv7og57EKqVROYInSRFhWISwsKlhfdAGea4qwQiOZ1210qP6KDq8NUR0LASupGAAB0LZgX00tvheKAWp','created_at' => '2024-05-15 10:47:30','updated_at' => '2024-05-15 19:38:00'),
            array('id' => '40','key' => 'paypal_logo','value' => '/uploads/media6645c36f03f5b.png','created_at' => '2024-05-15 19:42:09','updated_at' => '2024-05-16 08:27:27'),
            array('id' => '41','key' => 'razorpay_logo','value' => '/uploads/media66454706e1c63.png','created_at' => '2024-05-15 23:36:39','updated_at' => '2024-05-15 23:36:39'),
            array('id' => '42','key' => 'razorpay_status','value' => '1','created_at' => '2024-05-15 23:36:39','updated_at' => '2024-05-16 10:47:21'),
            array('id' => '43','key' => 'razorpay_country_name','value' => 'US','created_at' => '2024-05-15 23:36:39','updated_at' => '2024-05-16 07:58:17'),
            array('id' => '44','key' => 'razorpay_currency_name','value' => 'USD','created_at' => '2024-05-15 23:36:39','updated_at' => '2024-05-16 07:58:17'),
            array('id' => '45','key' => 'razorpay_currency_rate','value' => '1','created_at' => '2024-05-15 23:36:40','updated_at' => '2024-05-16 07:58:18'),
            array('id' => '46','key' => 'razorpay_client_id','value' => 'rzp_test_K7CipNQYyyMPiS','created_at' => '2024-05-15 23:36:40','updated_at' => '2024-05-15 23:53:44'),
            array('id' => '47','key' => 'razorpay_secret_key','value' => 'zSBmNMorJrirOrnDrbOd1ALO','created_at' => '2024-05-15 23:36:40','updated_at' => '2024-05-15 23:53:44')
          );
        \DB::table('payment_gateway_settings')->insert($payment_gateway_settings);
    }
}
