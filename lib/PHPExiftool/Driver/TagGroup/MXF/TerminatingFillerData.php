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
class TerminatingFillerData extends AbstractTagGroup
{
    protected string $id = 'MXF:TerminatingFillerData';

    protected string $name = 'TerminatingFillerData';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Terminating Filler Data',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 116427
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TerminatingFillerData',
            'desc' => [
                'en' => 'Terminating Filler Data',
            ],
        ],
    ];

    protected int $count = 0;
}
