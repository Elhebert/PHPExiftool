<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\IFD0;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TransferFunction extends AbstractTagGroup
{
    protected string $id = 'IFD0:TransferFunction';

    protected string $name = 'TransferFunction';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Exif::Main
             * line : 111336
             * type : int16u
             * writable : true
             * count : 768
             * flags : binary,unsafe
             */
            'id' => 'Exif::Main.IFD0:TransferFunction',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 768;

    protected int $flags = 2066;
}
