<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Composite;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class LensSpec extends AbstractTagGroup
{
    protected string $id = 'Composite:LensSpec';

    protected string $name = 'LensSpec';

    protected ?string $phpType = 'mixed';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Lens Spec',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : Composite
             * line : 67163
             * type : ?
             * writable : false
             * count :
             * flags :
             */
            'id' => 'Composite.Composite:LensSpec',
            'desc' => [
                'en' => 'Lens Spec',
            ],
        ],
    ];

    protected int $count = 0;
}
