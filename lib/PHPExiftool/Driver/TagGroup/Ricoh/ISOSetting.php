<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Ricoh;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ISOSetting extends AbstractTagGroup
{
    protected string $id = 'Ricoh:ISOSetting';

    protected string $name = 'ISOSetting';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'ISO Setting',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::ImageInfo
             * line : 233282
             * type : int8u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::ImageInfo.Ricoh:ISOSetting',
            'desc' => [
                'en' => 'ISO Setting',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
