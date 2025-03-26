<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\FLIR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SequenceFrameNumber extends AbstractTagGroup
{
    protected string $id = 'FLIR:SequenceFrameNumber';

    protected string $name = 'SequenceFrameNumber';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : FLIR::FPF
             * line : 122527
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'FLIR::FPF.FLIR:SequenceFrameNumber',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
