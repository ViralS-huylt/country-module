<?php

namespace Modules\Country\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Country\Database\Seeders\Traits\DisableForeignKeys;
use Modules\Core\Entities\Label;

class LabelTableSeeder extends Seeder
{
    use DisableForeignKeys;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();
        $module = 'country';
        Label::where('module', $module)->delete();

        $labels = [
            ["key" => "country", "vi" => ["value" => "Quốc gia"], "en" => ["value" => "Country"]],
            ["key" => "home", "vi" => ["value" => "Trang chủ"], "en" => ["value" => "Home"]],
            ["key" => "code", "vi" => ["value" => "Mã quốc gia"], "en" => ["value" => "Code"]],
            ["key" => "name", "vi" => ["value" => "Tên"], "en" => ["value" => "Name"]],
            ["key" => "flag", "vi" => ["value" => "Quốc kỳ"], "en" => ["value" => "Flag"]],
            ["key" => "action", "vi" => ["value" => "Hành động"], "en" => ["value" => "Action"]],
            ["key" => "message_create", "vi" => ["value" => "Thêm mới quốc gia thành công"], "en" => ["value" => "Create country success"]],
            ["key" => "message_confirm_update", "vi" => ["value" => "Bạn có muốn thay đổi trong thái của quốc gia này không"], "en" => ["value" => "Do you want a change in the state of this country"]],
            ["key" => "message_update", "vi" => ["value" => "Cập nhật quốc gia thành công"], "en" => ["value" => "Update country success"]],
            ["key" => "message_delete", "vi" => ["value" => "Xóa quốc gia thành công"], "en" => ["value" => "Delete country success"]],
            ["key" => "show", "vi" => ["value" => "Hiện"], "en" => ["value" => "Show"]],
            ["key" => "hide", "vi" => ["value" => "Ẩn"], "en" => ["value" => "Hide"]],

        ];

        foreach ($labels as $label) {
            $label['module'] = $module;
            Label::create($label);
        }

        $this->enableForeignKeys();
    }
}
