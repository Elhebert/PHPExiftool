<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MetaIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class UserAdjSBA_RGBShifts extends AbstractTagGroup
{
    protected string $id = 'MetaIFD:UserAdjSBA_RGBShifts';

    protected string $name = 'UserAdjSBA_RGBShifts';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::Meta
             * line : 158463
             * type : ?
             * writable : false
             * count :
             * flags : binary
             */
            'id' => 'Kodak::Meta.MetaIFD:UserAdjSBA_RGBShifts',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2;
}
