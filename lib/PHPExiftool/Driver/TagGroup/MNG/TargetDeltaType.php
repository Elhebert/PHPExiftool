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
class TargetDeltaType extends AbstractTagGroup
{
    protected string $id = 'MNG:TargetDeltaType';

    protected string $name = 'TargetDeltaType';

    protected ?string $phpType = 'int';

    protected bool $isWritable = false;

    protected array $description = [
        'en' => 'Target Delta Type',
    ];

    protected array $tags = [
        0 => [
            /**
             * table_name : MNG::PasteImage
             * line : 112347
             * type : int8u
             * writable : false
             * count :
             * flags :
             */
            'id' => 'MNG::PasteImage.MNG:TargetDeltaType',
            'desc' => [
                'en' => 'Target Delta Type',
            ],
        ],
    ];

    protected int $count = 0;
}
