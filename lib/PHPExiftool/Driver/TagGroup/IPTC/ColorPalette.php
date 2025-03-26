<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IPTC;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ColorPalette extends AbstractTagGroup
{
    protected string $id = 'IPTC:ColorPalette';

    protected string $name = 'ColorPalette';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Color Palette',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : IPTC::NewsPhoto
             * line : 104512
             * type : ?
             * writable : true
             * count :
             * flags : binary
             */
            'id' => 'IPTC::NewsPhoto.IPTC:ColorPalette',
            'desc' => [
                'en' => 'Color Palette',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2050;
}
