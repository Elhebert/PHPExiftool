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
class ProjectName extends AbstractTagGroup
{
    protected string $id = 'MXF:ProjectName';

    protected string $name = 'ProjectName';

    protected ?string $phpType = 'string';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Project Name',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MXF::Main
             * line : 117225
             * type : string
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ProjectName',
            'desc' => [
                'en' => 'Project Name',
            ],
        ],
        1 => [
            /**
             * table_name : MXF::Main
             * line : 117228
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MXF::Main.MXF:ProjectName',
            'desc' => [
                'en' => 'Project Name',
            ],
        ],
    ];

    protected int $count = 0;
}
