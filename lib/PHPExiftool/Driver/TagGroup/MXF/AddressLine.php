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
class AddressLine extends AbstractTagGroup
{
    protected string $id = 'MXF:AddressLine';

    protected string $name = 'AddressLine';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Address Line',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118009
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:AddressLine',
            'desc' => [
                'en' => 'Address Line',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 118012
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:AddressLine',
            'desc' => [
                'en' => 'Address Line',
            ],
        ],
    ];

    protected int $count = 0;
}
