<?php

    return [
        'title_page' => 'Tải lên',

        'form' => [
            'input' => [
                'choose_file' => 'Chọn tập tin...',
                'exists_func_override' => 'Ghi đè',
                'exists_func_skip'     => 'Bỏ qua',
                'exists_func_rename'   => 'Đổi tên'
            ],

            'button' => [
                'more'   => 'Thêm...',
                'upload' => 'Tải lên',
                'cancel' => 'Hủy'
            ]
        ],

        'alert' => [
            'data_empty_or_not_validate'                  => 'Dữ liệu không trống hoặc không hợp lệ',
            'not_choose_file'                             => 'Chưa chọn tập tin nào cả',
            'file_is_exists'                              => 'Tập tin <strong>{$filename}</strong> đã tồn tại',
            'file_error_max_size'                         => 'Tập tin <strong>{$filename}</strong> vượt quá kích thước',
            'path_file_error_is_directory'                => 'Thư mục tải lên đã chứa một thư mục với tên tập tin <strong>{$filname}</strong> không thể ghi đè',
            'path_file_is_exists_and_skip'                => 'Thư mục tải lên đã tồn tại một tập tin <strong>{$filename}</strong>, đã bỏ qua tập tin này',
            'error_delete_file_exists'                    => 'lng{upload.alert.file_is_exists}, xóa thất bại để ghi đè',
            'upload_file_exists_override_is_failed'       => 'lng{upload.alert.file_is_exists}, tải lên và ghi đè thất bại',
            'upload_file_exists_override_is_success'      => 'lng{upload.alert.file_is_exists}, tải lên và ghi đè thành công',
            'create_new_filename_exists_rename_is_failed' => 'lng{upload.alert.file_is_exists}, tạo tên mới cho tập tin thất bại',
            'upload_file_exists_rename_is_failed'         => 'lng{upload.alert.file_is_exists}, tải lên và thay đổi tên thất bại',
            'upload_file_exists_rename_is_success'        => 'lng{upload.alert.file_is_exists}, tải lên và thay đổi tên thành công',
            'upload_file_is_failed'                       => 'Tải lên tập tin <strong>{$filename}</strong> thất bại',
            'upload_file_is_success'                      => 'Tải lên tập tin <strong>{$filename}</strong> thành công'
        ]
    ];

?>
