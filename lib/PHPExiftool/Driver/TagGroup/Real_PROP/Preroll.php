<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_PROP;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class Preroll extends AbstractTagGroup
{
    protected string $id = 'Real-PROP:Preroll';

    protected string $name = 'Preroll';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::Properties
             * line : 330531
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Real::Properties.Real-PROP:Preroll',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
