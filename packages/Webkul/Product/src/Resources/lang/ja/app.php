<?php

return [
    'checkout' => [
        'cart' => [
            'integrity' => [
                'qty-missing'   => '少なくとも1つの製品は1つ以上の数量を持っている必要があります。',
            ],

            'invalid-file-extension'   => '無効なファイル拡張子が見つかりました。',
            'inventory-warning'        => '要求された数量は利用できません。後で再試行してください。',
            'missing-links'            => 'この製品にはダウンロードリンクがありません。',
            'missing-options'          => 'この製品にはオプションがありません。',
            'selected-products-simple' => '選択した製品はシンプル製品である必要があります。',
        ],
    ],

    'datagrid' => [
        'copy-of-slug'                  => ':valueのコピー',
        'copy-of'                       => ':valueのコピー',
        'variant-already-exist-message' => '同じ属性オプションを持つバリアントは既に存在しています。',
    ],

    'response' => [
        'product-can-not-be-copied' => ':type タイプの製品はコピーできません',
    ],

    'sort-by'  => [
        'options' => [
            'cheapest-first'  => '最安値順',
            'expensive-first' => '最高値順',
            'from-a-z'        => 'A-Z順',
            'from-z-a'        => 'Z-A順',
            'latest-first'    => '新着順',
            'oldest-first'    => '古い順',
        ],
    ],

    'type'     => [
        'abstract'     => [
            'offers' => ':qty個をそれぞれ:priceで購入し、:discountを節約',
        ],

        'bundle'       => 'バンドル',
        'booking'      => '予約',
        'configurable' => '設定可能',
        'downloadable' => 'ダウンロード可能',
        'grouped'      => 'グループ化',
        'simple'       => 'シンプル',
        'virtual'      => '仮想',
    ],
];
