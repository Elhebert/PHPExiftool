<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\LNK;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DriveSerialNumber extends AbstractTagGroup
{
    protected string $id = 'LNK:DriveSerialNumber';

    protected string $name = 'DriveSerialNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : LNK::LinkInfo
             * line : 161076
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'LNK::LinkInfo.LNK:DriveSerialNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
