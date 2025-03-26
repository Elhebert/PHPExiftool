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
class TargetXY extends AbstractTagGroup
{
    protected string $id = 'MNG:TargetXY';

    protected string $name = 'TargetXY';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::PasteImage
             * line : 165269
             * type : int32u
             * writable : false
             * count : 2
             * flags :
             */
            'id' => 'MNG::PasteImage.MNG:TargetXY',
            'desc' => [
            ],
        ],
    ];

    protected int $count = 2;
}
