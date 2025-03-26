<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImage extends AbstractTagGroup
{
    protected string $id = 'QuickTime:PreviewImage';

    protected string $name = 'PreviewImage';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Preview Image',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Main
             * line : 228846
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'QuickTime::Main.QuickTime:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
        1 => [
            /**
             * table_name : QuickTime::Main
             * line : 228864
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Main.QuickTime:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
        2 => [
            /**
             * table_name : QuickTime::Pittasoft
             * line : 229082
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'QuickTime::Pittasoft.QuickTime:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
        3 => [
            /**
             * table_name : QuickTime::PreviewInfo
             * line : 229105
             * type : undef
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'QuickTime::PreviewInfo.QuickTime:PreviewImage',
            'desc' => [
                'en' => 'Preview Image',
            ],
        ],
    ];

    protected int $count = 0;
}
