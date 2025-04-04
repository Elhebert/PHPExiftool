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
class TypeDefinitionElementValueList extends AbstractTagGroup
{
    protected string $id = 'MXF:TypeDefinitionElementValueList';

    protected string $name = 'TypeDefinitionElementValueList';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Type Definition Element Value List',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 115373
             * type : int64s
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:TypeDefinitionElementValueList',
            'desc' => [
                'en' => 'Type Definition Element Value List',
            ],
        ],
    ];

    protected int $count = 0;
}
