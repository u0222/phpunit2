<?php

namespace Tests\Unit\Admin;

use App\Exceptions\NotFoundException;
use App\Models\Admin;
use Database\Seeders\AdminsSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * 管理者テスト
 *
 * コマンド実行する場合はプロジェクトのルートディレクトリ上で実行すること
 * $ ./vendor/bin/phpunit ./tests/Unit/Admin/AdminTest.php
 */
class AdminTest extends TestCase
{

    use RefreshDatabase;

    // テスト対象
    private $target;

    public function setUp(): void
    {
        parent::setUp();
        // AdminTablesSeeder を使用しテストデータを登録
        $this->seed(AdminsSeeder::class);
        $this->target = new Admin();
    }

    /**
     * 概要 管理者の重複チェック
     * 条件 管理者が重複していない場合
     * 結果 trueを返すこと
     */
    public function test_管理者が重複していない場合trueを返すこと()
    {

    }

    /**
     * 概要 管理者の重複チェック
     * 条件 管理者が重複していない場合
     * 結果 falseを返すこと
     */
    public function test_管理者が重複する場合falseを返すこと()
    {

    }

    /**
     * 概要 管理者情報の取得
     * 条件 指定した管理者IDに対応する管理者情報が存在しない場合
     * 結果 例外が発生すること
     */
    public function test_管理者情報が存在しない場合例外が発生すること()
    {

    }

    /**
     * 管理者情報の取得処理の検証
     * 条件 テストデータのID1の管理者情報を作成
     * 結果 取得結果が作成した管理者情報と等しいこと
     */
    public function test_管理者情報の取得処理の検証()
    {

    }
}
