<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Real_MDPR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class TargetAudiences extends AbstractTagGroup
{
    protected string $id = 'Real-MDPR:TargetAudiences';

    protected string $name = 'TargetAudiences';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Real::FileInfo
             * line : 330349
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Real::FileInfo.Real-MDPR:TargetAudiences',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
