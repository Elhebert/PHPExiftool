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
class RicohImageHeight extends AbstractTagGroup
{
    protected string $id = 'Ricoh:RicohImageHeight';

    protected string $name = 'RicohImageHeight';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Ricoh Image Height',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Ricoh::ImageInfo
             * line : 233202
             * type : int16u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Ricoh::ImageInfo.Ricoh:RicohImageHeight',
            'desc' => [
                'en' => 'Ricoh Image Height',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
