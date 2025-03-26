<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Samsung;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class FocalLengthIn35mmFormat extends AbstractTagGroup
{
    protected string $id = 'Samsung:FocalLengthIn35mmFormat';

    protected string $name = 'FocalLengthIn35mmFormat';

    protected ?string $phpType = 'int';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Focal Length In 35mm Format',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Samsung::Type2
             * line : 235448
             * type : int32u
             * writable : true
             * count :
             * flags : permanent
             */
            'id' => 'Samsung::Type2.Samsung:FocalLengthIn35mmFormat',
            'desc' => [
                'en' => 'Focal Length In 35mm Format',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2052;
}
