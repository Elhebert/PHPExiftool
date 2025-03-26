<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Kodak;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PreviewImageWidth extends AbstractTagGroup
{
    protected string $id = 'Kodak:PreviewImageWidth';

    protected string $name = 'PreviewImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Preview Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Scrn
             * line : 108996
             * type : int16u
             * writable : false
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::Scrn.Kodak:PreviewImageWidth',
            'desc' => [
                'en' => 'Preview Image Width',
            ],
        ],
        1 => [
            /**
             * table_name : Kodak::SubIFD0
             * line : 109141
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Kodak::SubIFD0.Kodak:PreviewImageWidth',
            'desc' => [
                'en' => 'Preview Image Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
