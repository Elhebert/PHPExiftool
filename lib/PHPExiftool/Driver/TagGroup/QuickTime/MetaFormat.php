<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\QuickTime;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class MetaFormat extends AbstractTagGroup
{
    protected string $id = 'QuickTime:MetaFormat';

    protected string $name = 'MetaFormat';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Meta Format',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::MetaSampleDesc
             * line : 228981
             * type : undef
             * writable : false
             * count : 4
             * flags :
             */
            'id' => 'QuickTime::MetaSampleDesc.QuickTime:MetaFormat',
            'desc' => [
                'en' => 'Meta Format',
            ],
        ],
    ];

    protected int $count = 4;
}
