<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Photoshop;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class PrintPosition extends AbstractTagGroup
{
    protected string $id = 'Photoshop:PrintPosition';

    protected string $name = 'PrintPosition';

    protected ?string $phpType = 'float';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Photoshop::PrintScaleInfo
             * line : 305742
             * type : float
             * writable : false
             * count : 2
             * flags :
             */
            'id' => 'Photoshop::PrintScaleInfo.Photoshop:PrintPosition',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;
}
