<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\PNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class SubjectUnits extends AbstractTagGroup
{
    protected string $id = 'PNG:SubjectUnits';

    protected string $name = 'SubjectUnits';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : PNG::SubjectScale
             * line : 272770
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'PNG::SubjectScale.PNG:SubjectUnits',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
