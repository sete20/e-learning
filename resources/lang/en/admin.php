<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'setting' => [
        'title' => 'Settings',

        'actions' => [
            'index' => 'Settings',
            'create' => 'New Setting',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'key' => 'Key',
            'group' => 'Group',
            'value' => 'Value',
            
        ],
    ],

    'form' => [
        'title' => 'Forms',

        'actions' => [
            'index' => 'Forms',
            'create' => 'New Form',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'is_table' => 'Is table',
            'table' => 'Table',
            'inputs' => 'Inputs',
            
        ],
    ],

    'customer' => [
        'title' => 'Customers',

        'actions' => [
            'index' => 'Customers',
            'create' => 'New Customer',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'phone' => 'Phone',
            'email' => 'Email',
            'address' => 'Address',
            'county_id' => 'County',
            'gov_id' => 'Gov',
            'city_id' => 'City',
            'info' => 'Info',
            'password' => 'Password',
            'login' => 'Login',
            
        ],
    ],

    'categore' => [
        'title' => 'Categores',

        'actions' => [
            'index' => 'Categores',
            'create' => 'New Categore',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'is_published' => 'Is published',
            'seo_description' => 'Seo description',
            'seo_keywords' => 'Seo keywords',
            'seo_title' => 'Seo title',
            
        ],
    ],

    'class' => [
        'title' => 'Classes',

        'actions' => [
            'index' => 'Classes',
            'create' => 'New Class',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            
        ],
    ],

    'contact' => [
        'title' => 'Contacts',

        'actions' => [
            'index' => 'Contacts',
            'create' => 'New Contact',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'message' => 'Message',
            'section' => 'Section',
            
        ],
    ],

    'course' => [
        'title' => 'Courses',

        'actions' => [
            'index' => 'Courses',
            'create' => 'New Course',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'teacher_id' => 'Teacher',
            'name' => 'Name',
            'slug' => 'Slug',
            'description' => 'Description',
            'price' => 'Price',
            'discount' => 'Discount',
            'image' => 'Image',
            'material_id' => 'Material',
            'times' => 'Times',
            'live' => 'Live',
            'activated' => 'Activated',
            
        ],
    ],

    'faq' => [
        'title' => 'Faqs',

        'actions' => [
            'index' => 'Faqs',
            'create' => 'New Faq',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'answer' => 'Answer',
            
        ],
    ],

    'homework' => [
        'title' => 'Homeworks',

        'actions' => [
            'index' => 'Homeworks',
            'create' => 'New Homework',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'course_id' => 'Course',
            'teacher_id' => 'Teacher',
            'name' => 'Name',
            'description' => 'Description',
            'homework' => 'Homework',
            
        ],
    ],

    'homeworks-solf' => [
        'title' => 'Homeworks Solves',

        'actions' => [
            'index' => 'Homeworks Solves',
            'create' => 'New Homeworks Solf',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'test_id' => 'Test',
            'user_id' => 'User',
            'solve' => 'Solve',
            
        ],
    ],

    'material' => [
        'title' => 'Materials',

        'actions' => [
            'index' => 'Materials',
            'create' => 'New Material',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            
        ],
    ],

    'menu' => [
        'title' => 'Menus',

        'actions' => [
            'index' => 'Menus',
            'create' => 'New Menu',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'area' => 'Area',
            'items' => 'Items',
            
        ],
    ],

    'order' => [
        'title' => 'Orders',

        'actions' => [
            'index' => 'Orders',
            'create' => 'New Order',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'user_id' => 'User',
            'name' => 'Name',
            'uuid' => 'Uuid',
            'phone' => 'Phone',
            'total' => 'Total',
            'refund' => 'Refund',
            'payment' => 'Payment',
            
        ],
    ],

    'page' => [
        'title' => 'Pages',

        'actions' => [
            'index' => 'Pages',
            'create' => 'New Page',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'author_id' => 'Author',
            'title' => 'Title',
            'image' => 'Image',
            'slug' => 'Slug',
            'body' => 'Body',
            'is_published' => 'Is published',
            'seo_description' => 'Seo description',
            'seo_keywords' => 'Seo keywords',
            'seo_title' => 'Seo title',
            
        ],
    ],

    'payment' => [
        'title' => 'Payments',

        'actions' => [
            'index' => 'Payments',
            'create' => 'New Payment',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'user_id' => 'User',
            'order_id' => 'Order',
            'teacher_id' => 'Teacher',
            'name' => 'Name',
            'phone' => 'Phone',
            'total' => 'Total',
            'discount' => 'Discount',
            'payment' => 'Payment',
            'provider' => 'Provider',
            'provider_id' => 'Provider',
            
        ],
    ],

    'photo' => [
        'title' => 'Photos',

        'actions' => [
            'index' => 'Photos',
            'create' => 'New Photo',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
            
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'author_id' => 'Author',
            'category_id' => 'Category',
            'tag_id' => 'Tag',
            'title' => 'Title',
            'likes' => 'Likes',
            'image' => 'Image',
            'slug' => 'Slug',
            'body' => 'Body',
            'is_published' => 'Is published',
            'seo_description' => 'Seo description',
            'seo_keywords' => 'Seo keywords',
            'seo_title' => 'Seo title',
            
        ],
    ],

    'review' => [
        'title' => 'Reviews',

        'actions' => [
            'index' => 'Reviews',
            'create' => 'New Review',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'job' => 'Job',
            'review' => 'Review',
            'image' => 'Image',
            
        ],
    ],

    'social' => [
        'title' => 'Socials',

        'actions' => [
            'index' => 'Socials',
            'create' => 'New Social',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'url' => 'Url',
            
        ],
    ],

    'tag' => [
        'title' => 'Tags',

        'actions' => [
            'index' => 'Tags',
            'create' => 'New Tag',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            
        ],
    ],

    'teacher' => [
        'title' => 'Teachers',

        'actions' => [
            'index' => 'Teachers',
            'create' => 'New Teacher',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'password' => 'Password',
            'enabled' => 'Enabled',
            'image' => 'Image',
            'email_verified_at' => 'Email verified at',
            'material_id' => 'Material',
            
        ],
    ],

    'test' => [
        'title' => 'Tests',

        'actions' => [
            'index' => 'Tests',
            'create' => 'New Test',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'course_id' => 'Course',
            'teacher_id' => 'Teacher',
            'name' => 'Name',
            'description' => 'Description',
            'test' => 'Test',
            'grade' => 'Grade',
            
        ],
    ],

    'tests-solf' => [
        'title' => 'Tests Solves',

        'actions' => [
            'index' => 'Tests Solves',
            'create' => 'New Tests Solf',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'test_id' => 'Test',
            'user_id' => 'User',
            'solve' => 'Solve',
            'grade' => 'Grade',
            
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'email_verified_at' => 'Email verified at',
            'password' => 'Password',
            'phone' => 'Phone',
            'other_phone' => 'Other phone',
            'image' => 'Image',
            'type' => 'Type',
            'class_id' => 'Class',
            
        ],
    ],

    'comment' => [
        'title' => 'Comments',

        'actions' => [
            'index' => 'Comments',
            'create' => 'New Comment',
            'edit' => 'Edit :name',
            'export' => 'Export',
        ],

        'columns' => [
            'id' => 'ID',
            'user_id' => 'User',
            'post_id' => 'Post',
            'body' => 'Body',
            'is_published' => 'Is published',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];