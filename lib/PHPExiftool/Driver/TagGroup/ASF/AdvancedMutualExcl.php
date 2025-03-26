<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\ASF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AdvancedMutualExcl extends AbstractTagGroup
{
    protected string $id = 'ASF:AdvancedMutualExcl';

    protected string $name = 'AdvancedMutualExcl';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Advanced Mutual Excl',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::HeaderExtension
             * line : 940
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::HeaderExtension.ASF:AdvancedMutualExcl',
            'desc' => [
                'en' => 'Advanced Mutual Excl',
            ],
        ],
    ];

    protected int $count = 0;
}
