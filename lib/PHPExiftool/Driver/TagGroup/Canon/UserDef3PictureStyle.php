<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserDef3PictureStyle extends AbstractTagGroup
{
    protected string $id = 'Canon:UserDef3PictureStyle';

    protected string $name = 'UserDef3PictureStyle';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'User Def 3 Picture Style',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Canon::CameraInfo5D
             * line : 26686
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::CameraInfo5D.Canon:UserDef3PictureStyle',
            'desc' => [
                'en' => 'User Def 3 Picture Style',
            ],
        ],
        1 => [
            /**
             * table_name : Canon::PSInfo
             * line : 51519
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo.Canon:UserDef3PictureStyle',
            'desc' => [
                'en' => 'User Def 3 Picture Style',
            ],
        ],
        2 => [
            /**
             * table_name : Canon::PSInfo2
             * line : 52258
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Canon::PSInfo2.Canon:UserDef3PictureStyle',
            'desc' => [
                'en' => 'User Def 3 Picture Style',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
