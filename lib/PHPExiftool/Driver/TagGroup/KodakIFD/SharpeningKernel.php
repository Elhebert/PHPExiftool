<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SharpeningKernel extends AbstractTagGroup
{
    protected string $id = 'KodakIFD:SharpeningKernel';

    protected string $name = 'SharpeningKernel';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Kodak::IFD
             * line : 155403
             * type : int16s
             * writable : true
             * count : 25
             * flags : permanent
             */
            'id' => 'Kodak::IFD.KodakIFD:SharpeningKernel',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 25;

    protected int $flags = 2052;
}
