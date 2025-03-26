<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Keys;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LivePhotoInfo extends AbstractTagGroup
{
    protected string $id = 'Keys:LivePhotoInfo';

    protected string $name = 'LivePhotoInfo';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Keys
             * line : 323447
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Keys.Keys:LivePhotoInfo',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
