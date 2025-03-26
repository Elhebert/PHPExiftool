<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ICC_meta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MediaWeight extends AbstractTagGroup
{
    protected string $id = 'ICC-meta:MediaWeight';

    protected string $name = 'MediaWeight';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Media Weight',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ICC_Profile::Metadata
             * line : 102086
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ICC_Profile::Metadata.ICC-meta:MediaWeight',
            'desc' => [
                'en' => 'Media Weight',
            ],
        ],
    ];

    protected int $count = 0;
}
