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
class HintFormat extends AbstractTagGroup
{
    protected string $id = 'QuickTime:HintFormat';

    protected string $name = 'HintFormat';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Hint Format',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : QuickTime::HintSampleDesc
             * line : 219482
             * type : undef
             * writable : false
             * count : 4
             * flags :
             */
            'id' => 'QuickTime::HintSampleDesc.QuickTime:HintFormat',
            'desc' => [
                'en' => 'Hint Format',
            ],
        ],
    ];

    protected int $count = 4;
}
