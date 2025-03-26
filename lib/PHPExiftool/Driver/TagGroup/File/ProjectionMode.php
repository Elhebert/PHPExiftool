<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ProjectionMode extends AbstractTagGroup
{
    protected string $id = 'File:ProjectionMode';

    protected string $name = 'ProjectionMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Projection Mode',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MRC::FEI12
             * line : 113219
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MRC::FEI12.File:ProjectionMode',
            'desc' => [
                'en' => 'Projection Mode',
            ],
        ],
    ];

    protected int $count = 0;
}
