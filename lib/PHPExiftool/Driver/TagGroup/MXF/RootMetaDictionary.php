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
class RootMetaDictionary extends AbstractTagGroup
{
    protected string $id = 'MXF:RootMetaDictionary';

    protected string $name = 'RootMetaDictionary';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Root Meta Dictionary',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 118438
             * type : ?
             * writable : false
             * count :
             * flags : unknown
             */
            'id' => 'MXF::Main.MXF:RootMetaDictionary',
            'desc' => [
                'en' => 'Root Meta Dictionary',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 32;
}
