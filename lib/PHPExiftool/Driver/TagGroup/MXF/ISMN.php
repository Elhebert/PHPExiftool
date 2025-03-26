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
class ISMN extends AbstractTagGroup
{
    protected string $id = 'MXF:ISMN';

    protected string $name = 'ISMN';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'ISMN',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 113907
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:ISMN',
            'desc' => [
                'en' => 'ISMN',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
