<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CountryName extends AbstractTagGroup
{
    protected string $id = 'MXF:CountryName';

    protected string $name = 'CountryName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Country Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114938
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:CountryName',
            'desc' => [
                'en' => 'Country Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 116409
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:CountryName',
            'desc' => [
                'en' => 'Country Name',
            ],
        ],
        2 => [
            /**
             * table_name : MXF::Main
             * line : 116412
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:CountryName',
            'desc' => [
                'en' => 'Country Name',
            ],
        ],
        3 => [
            /**
             * table_name : MXF::Main
             * line : 116748
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:CountryName',
            'desc' => [
                'en' => 'Country Name',
            ],
        ],
    ];

    protected int $count = 0;
}
