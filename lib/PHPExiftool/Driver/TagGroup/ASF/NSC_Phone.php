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
class NSC_Phone extends AbstractTagGroup
{
    protected string $id = 'ASF:NSC_Phone';

    protected string $name = 'NSC_Phone';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'NSC Phone',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : ASF::ExtendedDescr
             * line : 682
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'ASF::ExtendedDescr.ASF:NSC_Phone',
            'desc' => [
                'en' => 'NSC Phone',
            ],
        ],
    ];

    protected int $count = 0;
}
