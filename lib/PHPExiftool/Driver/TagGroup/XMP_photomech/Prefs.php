<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_photomech;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Prefs extends AbstractTagGroup
{
    protected string $id = 'XMP-photomech:Prefs';

    protected string $name = 'Prefs';

    protected ?string $phpType = 'string';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Prefs',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhotoMechanic::XMP
             * line : 211955
             * type : string
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PhotoMechanic::XMP.XMP-photomech:Prefs',
            'desc' => [
                'en' => 'Prefs',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
