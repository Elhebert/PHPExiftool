<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PhotoMechanic;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class RawCropBottom extends AbstractTagGroup
{
    protected string $id = 'PhotoMechanic:RawCropBottom';

    protected string $name = 'RawCropBottom';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PhotoMechanic::SoftEdit
             * line : 304694
             * type : int32s
             * writable : true
             * count :
             * flags :
             */
            'id' => 'PhotoMechanic::SoftEdit.PhotoMechanic:RawCropBottom',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
