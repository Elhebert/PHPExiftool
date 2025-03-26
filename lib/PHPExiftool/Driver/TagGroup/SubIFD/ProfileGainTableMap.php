<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\SubIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProfileGainTableMap extends AbstractTagGroup
{
    protected string $id = 'SubIFD:ProfileGainTableMap';

    protected string $name = 'ProfileGainTableMap';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Profile Gain Table Map',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 84784
             * type : undef
             * writable : true
             * count :
             * flags : binary,unsafe
             */
            'id' => 'Exif::Main.SubIFD:ProfileGainTableMap',
            'desc' => [
                'en' => 'Profile Gain Table Map',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2066;
}
