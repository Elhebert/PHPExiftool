<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MNG;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class CompositionMode extends AbstractTagGroup
{
    protected string $id = 'MNG:CompositionMode';

    protected string $name = 'CompositionMode';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::PasteImage
             * line : 165275
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::PasteImage.MNG:CompositionMode',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 0;
}
