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
class SourceData extends AbstractTagGroup
{
    protected string $id = 'Flash:SourceData';

    protected string $name = 'SourceData';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Source Data',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Flash::Meta
             * line : 86777
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Flash::Meta.Flash:SourceData',
            'desc' => [
                'en' => 'Source Data',
            ],
        ],
    ];

    protected int $count = 0;
}
