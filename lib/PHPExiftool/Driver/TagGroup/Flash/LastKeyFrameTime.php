<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Flash;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LastKeyFrameTime extends AbstractTagGroup
{
    protected string $id = 'Flash:LastKeyFrameTime';

    protected string $name = 'LastKeyFrameTime';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Last Key Frame Time',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Flash::Meta
             * line : 86759
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Flash::Meta.Flash:LastKeyFrameTime',
            'desc' => [
                'en' => 'Last Key Frame Time',
            ],
        ],
    ];

    protected int $count = 0;
}
