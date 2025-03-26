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
class ObjectClassDefinition extends AbstractTagGroup
{
    protected string $id = 'MXF:ObjectClassDefinition';

    protected string $name = 'ObjectClassDefinition';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 172448
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:ObjectClassDefinition',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
