<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Meta;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MetaVersion extends AbstractTagGroup
{
    protected string $id = 'Meta:MetaVersion';

    protected string $name = 'MetaVersion';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Meta Version',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::Meta
             * line : 228930
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'QuickTime::Meta.Meta:MetaVersion',
            'desc' => [
                'en' => 'Meta Version',
            ],
        ],
    ];

    protected int $count = 0;
}
