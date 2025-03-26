<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\XMP_aux;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ApproximateFocusDistance extends AbstractTagGroup
{
    protected string $id = 'XMP-aux:ApproximateFocusDistance';

    protected string $name = 'ApproximateFocusDistance';

    protected ?string $phpType = 'float';

    protected bool $isWritable = true;

    protected array $description = [
        'en' => 'Approximate Focus Distance',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : XMP::aux
             * line : 281657
             * type : rational
             * writable : true
             * count :
             * flags :
             */
            'id' => 'XMP::aux.XMP-aux:ApproximateFocusDistance',
            'desc' => [
                'en' => 'Approximate Focus Distance',
            ],
        ],
    ];

    protected int $count = 0;

    protected int $flags = 2048;
}
