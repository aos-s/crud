<?php
/**
 * 顧客シーダー
 */
use App\Customer;
use Illuminate\Database\Seeder;

/**
 * 顧客Seederクラスです。
 *
 * @author Satoshi Nagashiba <bobtabo.buhibuhi@gmail.com>
 */
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = 'customers';
        DB::table($table)->delete();
        for ($i = 0; $i < 100; $i++) {
            factory(Customer::class)->create();
        }
    }
}
