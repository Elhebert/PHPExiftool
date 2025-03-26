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
class FilteringApplied extends AbstractTagGroup
{
    protected string $id = 'MXF:FilteringApplied';

    protected string $name = 'FilteringApplied';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Filtering Applied',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 114494
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:FilteringApplied',
            'desc' => [
                'en' => 'Filtering Applied',
            ],
        ],
    ];

    protected int $count = 0;
}
