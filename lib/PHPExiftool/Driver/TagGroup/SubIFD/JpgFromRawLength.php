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
class JpgFromRawLength extends AbstractTagGroup
{
    protected string $id = 'SubIFD:JpgFromRawLength';

    protected string $name = 'JpgFromRawLength';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Jpg From Raw Length',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 82023
             * type : int32u
             * writable : true
             * count :
             * flags : permanent,protected
             */
            'id' => 'Exif::Main.SubIFD:JpgFromRawLength',
            'desc' => [
                'en' => 'Jpg From Raw Length',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2060;
}
