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
class RicohImageWidth extends AbstractTagGroup
{
    protected string $id = 'Ricoh:RicohImageWidth';

    protected string $name = 'RicohImageWidth';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Ricoh Image Width',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::ImageInfo
             * line : 233199
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::ImageInfo.Ricoh:RicohImageWidth',
            'desc' => [
                'en' => 'Ricoh Image Width',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
