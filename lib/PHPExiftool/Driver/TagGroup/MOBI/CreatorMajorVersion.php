<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MOBI;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CreatorMajorVersion extends AbstractTagGroup
{
    protected string $id = 'MOBI:CreatorMajorVersion';

    protected string $name = 'CreatorMajorVersion';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Palm::EXTH
             * line : 273587
             * type : int32u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Palm::EXTH.MOBI:CreatorMajorVersion',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
